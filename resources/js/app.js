require("./bootstrap");

import Alpine from "alpinejs";
import * as THREE from "three";
import { gsap, Power1 } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { GLTFLoader } from "three/examples/jsm/loaders/GLTFLoader.js";
import { RGBELoader } from "three/examples/jsm/loaders/RGBELoader.js";
import { Loader } from "@googlemaps/js-api-loader";

gsap.registerPlugin(ScrollTrigger);

window.Alpine = Alpine;

Alpine.start();

const ctx = document.getElementById("bottleCanvas");
const ctxContainer = document.getElementById("bottleCanvasContainer");

// CHECK IF MENU CANVAS EXISTs

////////////////////
/// TRHEE JS PART //
////////////////////
if (ctx) {
    const isMenuCanvas = ctx.classList.contains("menuCanvas");

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(
        25,
        window.innerWidth / window.innerHeight,
        0.1,
        1000
    );

    let params = {};

    if (isMenuCanvas) {
        params = {
            color: 0x095959,
            transmission: 0.1,
            opacity: 0.5,
            metalness: 0.9,
            roughness: 0,
            ior: 1.52,
            thickness: 0.1,
            specularIntensity: 5,
            specularColor: 0x000000,
            lightIntensity: 1,
            exposure: 1,
        };

        scene.fog = new THREE.Fog("#f6eee3", 15, 32);
        scene.backgroundColor = "#FFFFFF";
    } else {
        params = {
            color: 0x063e33,
            transmission: 0.5,
            opacity: 1,
            metalness: 1,
            roughness: 0,
            ior: 1.52,
            thickness: 0.1,
            specularIntensity: 5,
            specularColor: 0x000000,
            lightIntensity: 1,
            exposure: 1,
        };
    }

    const renderer = new THREE.WebGLRenderer({ canvas: ctx, alpha: true });
    renderer.setClearColor(0x000000, 0);
    renderer.setSize(ctx.clientWidth, ctx.clientHeight);
    renderer.setPixelRatio(window.devicePixelRatio);
    resizeCanvasToDisplaySize();

    let bottleObj;

    window.addEventListener("resize", () => {
        renderer.setSize(ctxContainer.clientWidth, ctxContainer.clientHeight);
        camera.aspect = ctxContainer.clientWidth / ctxContainer.clientHeight;

        camera.updateProjectionMatrix();
    });

    if (isMenuCanvas) {
        camera.position.z = 10;
    } else {
        camera.position.z = 10;
    }

    // LIGHTS

    const pointLight = new THREE.PointLight(0xffffff, 1, 20);
    const ambientLight = new THREE.AmbientLight(0xffffff);
    scene.add(pointLight);
    pointLight.position.x = -5;
    pointLight.position.y = 2;
    pointLight.position.z = 15;

    // LOAD OBJECTS

    const loader = new GLTFLoader();

    // Load envMap.
    let textureLoader = new THREE.TextureLoader();
    let texture = textureLoader.load("/img/antwerp_360.jpeg");

    let pmremGenerator = new THREE.PMREMGenerator(renderer);
    pmremGenerator.compileEquirectangularShader();

    function resizeCanvasToDisplaySize() {
        const canvas = renderer.domElement;
        // look up the size the canvas is being displayed
        const width = ctxContainer.clientWidth;
        const height = ctxContainer.clientHeight;

        // adjust displayBuffer size to match
        if (canvas.width !== width || canvas.height !== height) {
            // you must pass false here or three.js sadly fights the browser
            renderer.setSize(width, height, false);
            camera.aspect = width / height;
            camera.updateProjectionMatrix();

            // update any render target sizes here
        }
    }

    loader.load(
        "models/bottleObj/bottle.gltf",
        function (gltf) {
            bottleObj = gltf.scene.children[0];

            const material = new THREE.MeshPhysicalMaterial({
                color: params.color,
                metalness: params.metalness,
                roughness: params.roughness,
                ior: params.ior,
                transmission: params.transmission,
                specularIntensity: params.specularIntensity,
                specularColor: params.specularColor,
                opacity: params.opacity,
                side: THREE.DoubleSide,
            });

            new RGBELoader().load("img/background_1k.hdr", (texture) => {
                texture.mapping = THREE.EquirectangularReflectionMapping;
                let envMap =
                    pmremGenerator.fromEquirectangular(texture).texture;

                bottleObj.material.envMap = envMap;

                scene.environment = envMap;
                //scene.background

                bottleObj.position.y -= 2.5;
                bottleObj.material = material;

                if (isMenuCanvas) {
                    let bottlecopies = [];

                    for (let i = 0; i < 8; i++) {
                        bottlecopies[i] = bottleObj.clone();
                        //bottlecopies[i].position.z -= 20* Math.cos(-1*(Math.PI/2) / 8 *i);
                        //bottlecopies[i].position.x += -7- (10* Math.sin(-1*(Math.PI/2) / 8 *i));
                        console.log(Math.sin(((-1 * (Math.PI / 2)) / 8) * i));
                        scene.add(bottlecopies[i]);
                        gsap.fromTo(
                            bottlecopies[i].position,
                            {
                                x: 0,
                                z: 0,
                            },
                            {
                                x:
                                    -7 -
                                    10 *
                                        Math.sin(
                                            ((-1 * (Math.PI / 2)) / 8) * i
                                        ),
                                z:
                                    -20 *
                                    Math.cos(((-1 * (Math.PI / 2)) / 8) * i),
                                duration: 1,
                                ease: "power1.inOut",
                            }
                        );
                    }
                } else {
                    scene.add(bottleObj);
                }

                initGSAP();

                animate();
            });
        },
        undefined,
        function (error) {
            console.error(error);
        }
    );

    function animate() {
        // camera.lookAt(bottleObj.position);
        resizeCanvasToDisplaySize();

        requestAnimationFrame(animate);
        renderer.render(scene, camera);
    }

    function addMouseMoveListener() {
        document.addEventListener("mousemove", (e) => {
            // pointLight.position.x =
            //     ((e.screenX / document.body.clientWidth) * 100 - 50) * 0.02;
            // pointLight.position.y =
            //     ((e.screenY / document.body.clientHeight) * 100 - 50) * 0.02 +
            //     2;
            // bottleObj.rotation.z =
            //     ((e.screenY / document.body.clientWidth) * 100 - 50) * 0.001;
            // bottleObj.rotation.x =
            //     ((e.screenX / document.body.clientWidth) * 100 - 50) * 0.002;
            // bottleObj.rotation.y =
            //     ((e.screenY / document.body.clientWidth) * 100 - 50) * 0.002;
        });
    }

    function initGSAP() {
        if (isMenuCanvas) {
        } else {
            gsap.timeline()
                .fromTo(
                    bottleObj.position,
                    {
                        z: -8.4,
                        y: -3,
                    },
                    {
                        z: -4.54,
                        y: -2.5,
                        duration: 1,
                        ease: "power1.inOut",
                    }
                )
                .to(bottleObj.position, {
                    z: -3.54,
                    duration: 30,
                    ease: "power1.inOut",
                });
            gsap.fromTo(
                bottleObj.material,
                {
                    transmission: 1,
                },
                {
                    transmission: 0.5,
                    duration: 1,
                    ease: "power1.inOut",
                }
            );
        }
    }
}

// gsap.to(".paralax-img", {
//     top: -20,
//     scrollTrigger: {
//         trigger: ".parallax-container",
//         scrub: 1,
//         top: "top 0",
//     },
// });

// MENU TOP SECTION ANIMATION

if (document.getElementById("menuTopSectionText")) {
    let topSectionAnim = gsap.timeline();

    topSectionAnim
        .to("#menuTopSectionText", {
            color: "#063e33",
            duration: 0.1,
        })
        .to("#menuTopSection", {
            paddingTop: "2rem",
            paddingBottom: "2rem",
            ease: Power1.easeIn,
            duration: 0.2,
        }, '<')
        .to("#menuTopSectionText", {
            height: 0,
            marginBottom: 0,
            ease: Power1.easeOut,
            duration: 0.2,
        },'<');

    ScrollTrigger.create({
        animation: topSectionAnim,
        start: "-312rem top",
        end: "-197rem top",
        scrub: true,
        trigger: '#menu-content',
        toggleActions: "play none none reverse ",
    });
}

gsap.utils.toArray("[data-module-parallax]").forEach((section) => {
    gsap.utils
        .toArray(section.querySelectorAll("[data-parallax]"))
        .forEach((parallax) => {
            const depth = parallax.dataset.speed;
            const movement = -(parallax.offsetHeight * depth);

            gsap.fromTo(
                parallax,
                {
                    y: -movement,
                },
                {
                    y: movement,
                    ease: "none",
                    scrollTrigger: {
                        trigger: section,
                        scrub: true,
                    },
                }
            );
        });
});

// MOUSE ACTION

// get all links
let mouseIsMovable = true;
let mouseIsHoveringBtn = false;
let allHoverLinks = document.querySelectorAll("a[data-hover]");
let allHoverDivs = document.querySelectorAll("div[data-hover-btn]");
let allHoverButton = document.querySelectorAll("a[data-hover-btn]");

allHoverDivs.forEach((btn) => {
    btn.addEventListener("mouseenter", (e) => {
        gsap.to("#mouse", {
            duration: 0.1,
            css: {
                backgroundColor: "#f6eee3",
            },
        });
    });
    btn.addEventListener("mouseout", (e) => {
        gsap.to("#mouse", {
            duration: 0.1,
            css: {
                backgroundColor: "#063e33",
            },
        });
    });
});
allHoverButton.forEach((btn) => {
    btn.addEventListener("mouseenter", (e) => {
        gsap.to("#mouse", {
            duration: 0.1,
            css: {
                backgroundColor: "#f6eee3",
            },
        });
    });
})

allHoverLinks.forEach((link) => {
    link.addEventListener("mouseenter", (e) => {
        let targetBox = e.target.getBoundingClientRect();
        mouseIsMovable = false;
        gsap.to("#mouse", {
            duration: 0.1,
            css: {
                left: e.pageX,
                top: e.pageY - window.scrollY,
                borderRadius: 0,
                height: "1px",
                width: e.currentTarget.offsetWidth,
                left: targetBox.x,
                top: targetBox.y + targetBox.height,
                transform: "translate(0,0)",
            },
        });
    });
    link.addEventListener("mouseout", (e) => {
        mouseIsMovable = true;
        gsap.to("#mouse", {
            duration: 0.1,
            css: {
                left: e.pageX,
                top: e.pageY - window.scrollY,
                borderRadius: "100%",
                height: "1rem",
                width: "1rem",
                transform: "translate(-50%,-50%)",
            },
        });
    });
});

function moveMouse(e) {
    if (mouseIsMovable) {
        gsap.to("#mouse", {
            duration: 0.1,
            css: {
                left: e.pageX,
                top: e.pageY - window.scrollY,
                borderRadius: "100%",
                height: "1rem",
                width: "1rem",
                transform: "translate(-50%,-50%)",
            },
        });
    }
}

window.addEventListener("mousemove", moveMouse);

// HIDE MouSE IF MOBILE
if (
    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
    )
) {
    document.getElementById("mouse").hidden = true;
}
