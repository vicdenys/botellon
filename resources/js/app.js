require("./bootstrap");

import Alpine from "alpinejs";
import * as THREE from 'three';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader.js';

gsap.registerPlugin(ScrollTrigger);

window.Alpine = Alpine;

Alpine.start();

// const ctx = document.getElementById('bottleCanvas');

// const scene = new THREE.Scene();
// const camera = new THREE.PerspectiveCamera(
//     75,
//     window.innerWidth / window.innerHeight,
//     0.1,
//     1000
// );

// const renderer = new THREE.WebGLRenderer({canvas : ctx, alpha: true});
// renderer.setClearColor( 0x000000, 0 );
// renderer.setSize(window.innerWidth, window.innerHeight);
// renderer.setPixelRatio(window.devicePixelRatio);

// let bottleObj;

// window.addEventListener('resize',  () => {
//     renderer.setSize(window.innerWidth, window.innerHeight);
//     camera.aspect = window.innerWidth/window.innerHeight;

//     camera.updateProjectionMatrix();
// });


// // const mtlLoader = new MTLLoader();
// // mtlLoader.setTexturePath("models/bottleObj/")
// // mtlLoader.load('models/bottleObj/bottle.mtl', (materials)=> {
// //     materials.preload();

// //     const objLoader = new THREE.ObjectLoader();
// //     // objLoader.setMaterials(materials);
// //     objLoader.load('./models/bottleObj/bottle.obj', (object) =>{
// //         bottleObj = object;
// //         scene.add(bottleObj);
// //     })

// // })

// const loader = new GLTFLoader();

// loader.load( 'models/bottleObj/bottle.gltf', function ( gltf ) {
//     bottleObj = gltf.scene
// 	scene.add( gltf.scene );
//     initGSAP();

//     animate();

// }, undefined, function ( error ) {

// 	console.error( error );

// } );


// const ambientLight = new THREE.AmbientLight(0xFFFFFF);
// ambientLight.intensity = 2;
// scene.add( ambientLight );



// camera.position.z = 0.35;

// function animate() {
    
//     bottleObj.rotation.y += 0.01;

//     requestAnimationFrame(animate);
//     renderer.render(scene, camera);
// }

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
