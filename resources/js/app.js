require("./bootstrap");

import Alpine from "alpinejs";
import * as THREE from "three";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { GLTFLoader } from "three/examples/jsm/loaders/GLTFLoader.js";
import { RGBELoader } from "three/examples/jsm/loaders/RGBELoader.js";

gsap.registerPlugin(ScrollTrigger);

window.Alpine = Alpine;

Alpine.start();

const ctx = document.getElementById("bottleCanvas");
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(
    25,
    window.innerWidth / window.innerHeight,
    0.1,
    1000
);
const params = {
    color: 0x19191A,
    transmission: 0.9,
    opacity: 1,
    metalness: 0.2,
    roughness: 0,
    ior: 1.52,
    thickness: 0.1,
    specularIntensity: 0.9,
    specularColor: 0x000000,
    lightIntensity: 1,
    exposure: 1
  };

const renderer = new THREE.WebGLRenderer({ canvas: ctx, alpha: true });
renderer.setClearColor(0x000000, 0);
renderer.setSize(window.innerWidth, window.innerHeight);
renderer.setPixelRatio(window.devicePixelRatio);

let bottleObj;

window.addEventListener("resize", () => {
    renderer.setSize(window.innerWidth, window.innerHeight);
    camera.aspect = window.innerWidth / window.innerHeight;

    camera.updateProjectionMatrix();
});

camera.position.z = 5;

// LIGHTS

const pointLight = new THREE.PointLight(0xffffff, 1, 20);
const ambientLight = new THREE.AmbientLight(0xffffff);
scene.add(pointLight);
pointLight.position.x = -5
pointLight.position.y = 2
pointLight.position.z = 15


// LOAD OBJECTS

const loader = new GLTFLoader();

// Load envMap.
let textureLoader = new THREE.TextureLoader();
let texture = textureLoader.load("/img/antwerp_360.jpeg");

let pmremGenerator = new THREE.PMREMGenerator(renderer);
pmremGenerator.compileEquirectangularShader();

loader.load(
    "models/bottleObj/bottle.gltf",
    function (gltf) {
        bottleObj = gltf.scene.children[0];

        const material = new THREE.MeshPhysicalMaterial( {
            color: params.color,
            metalness: params.metalness,
            roughness: params.roughness,
            ior: params.ior,
            transmission: params.transmission,
            specularIntensity: params.specularIntensity,
            specularColor: params.specularColor,
            opacity: params.opacity,
            side: THREE.DoubleSide,
          } );

        new RGBELoader().load("img/background_1k.hdr", (texture) => {
            texture.mapping = THREE.EquirectangularReflectionMapping;
            let envMap = pmremGenerator.fromEquirectangular(texture).texture;

            bottleObj.material.envMap = envMap;

            scene.environment = envMap;
            //scene.background
            bottleObj.position.y -= 2.5;
            bottleObj.material = material

            scene.add(bottleObj);

            addMouseMoveListener();
            // initGSAP();

            animate();
        });
    },
    undefined,
    function (error) {
        console.error(error);
    }
);



camera.position.z = 5;

function animate() {

    camera.position.z += 0.005;
    
    // camera.lookAt(bottleObj.position);

    requestAnimationFrame(animate);
    renderer.render(scene, camera);
    

}


function addMouseMoveListener() {
    console.log(ctx);
    document.addEventListener('mousemove', (e) => {
        pointLight.position.x = ((e.screenX / document.body.clientWidth * 100) - 50) * 0.02;
        pointLight.position.y = (((e.screenY / document.body.clientHeight * 100) - 50) * 0.02) + 2 ;
    })
}

// function initGSAP(){

//     gsap.fromTo(bottleObj.rotation, {
//         x :  -0.05,
//         z : -.4,
//     },{
//         x :  0.5,
//         z : -.4,
//         scrollTrigger: {
//             scrub: true,
//         }
//     } )

//     gsap.fromTo(bottleObj.position, {
//         x :  .5,
//         z : -.4,
//     },{
//         x :  .05,
//         z : -.04,
//         scrollTrigger: {
//             scrub: true,
//         }
//     } )
// }
