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

if (ctx) {
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(
        25,
        window.innerWidth / window.innerHeight,
        0.1,
        1000
    );

    let params = {};

    if (document.getElementById("whiteBottleCanvasContainer")) {
        params = {
            color: 0xf6eee3,
            transmission: 1,
            opacity: 1,
            metalness: 0.3,
            roughness: 0,
            ior: 1.52,
            thickness: 0.1,
            specularIntensity: 5,
            specularColor: 0x000000,
            lightIntensity: 1,
            exposure: 1,
        };
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
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(window.devicePixelRatio);

    let bottleObj;

    window.addEventListener("resize", () => {
        renderer.setSize(window.innerWidth, window.innerHeight);
        camera.aspect = window.innerWidth / window.innerHeight;

        camera.updateProjectionMatrix();
    });

    if (document.getElementById("whiteBottleCanvasContainer")) {
        camera.position.z = 35;
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

                scene.add(bottleObj);

                if (!document.getElementById("whiteBottleCanvasContainer")) {
                    addMouseMoveListener();
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
        if (document.getElementById("whiteBottleCanvasContainer")) {
            bottleObj.rotation.x = -0.4;

            let whiteBottleTln = gsap.timeline();

            whiteBottleTln
                .to(bottleObj.position, {
                    z: -1800.4,
                })
                .to(bottleObj.position, {
                    z: 4.54,
                    ease: "power1.inOut",
                })
                .to(bottleObj.rotation, {
                    y: -3,
                    z: -0.1,
                })

                .to(bottleObj.rotation, {
                    y: -6,
                    z: -0.1,
                });

            ScrollTrigger.create({
                animation: whiteBottleTln,
                scrub: true,
                trigger: "#bottleTrigger",
            });
        } else {
            gsap.timeline()
                .fromTo(
                    bottleObj.position,
                    {
                        z: -8.4,
                        y: -3,
                    },
                    {
                        z: -2.54,
                        y: -2.5,
                        duration: 1,
                        ease: "power1.inOut",
                    }
                )
                .to(bottleObj.position, {
                    z: -0.54,
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

gsap.to(".paralax-img", {
    top: -20,
    scrollTrigger: {
        trigger: ".parallax-container",
        scrub: 1,
        top: "top 0",
    },
});

// MENU TOP SECTION ANIMATION

let topSectionAnim = gsap.timeline();

topSectionAnim
    .to("#menuTopSectionText", {
        color: "#f6eee3",
        duration: 0.2,
    })
    .to("#menuTopSection", {
        paddingTop: "2rem",
        paddingBottom: "2rem",
        ease: Power1.easeIn,
        duration: 0.2,
    })
    .to("#menuTopSectionText", {
        height: 0,
        marginBottom: 0,
        ease: Power1.easeOut,
        duration: 0.2,
    });

ScrollTrigger.create({
    animation: topSectionAnim,
    start: "-75rem top",
    toggleActions: "play none none reverse ",
});

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
let allHoverButtons = document.querySelectorAll("a[data-hover-btn]");

allHoverButtons.forEach((btn) => {
    btn.addEventListener("mouseenter", (e) => {
        mouseIsHoveringBtn = true;
        gsap.to("#mouse", {
            duration: 0.1,
            css: {
                backgroundColor: "#f6eee3",
            },
        });
        gsap.to(btn, {
            duration: 0.1,
            scale: 1.05,
        });
    });
    btn.addEventListener("mouseout", (e) => {
        mouseIsHoveringBtn = false;
        gsap.to("#mouse", {
            duration: 0.1,
            css: {
                backgroundColor: "#063e33",
            },
        });
        gsap.to(btn, {
            duration: 0.1,
            scale: 1,
        });
        btn.style.transform = `translate(0px ,0px)`;
    });
    btn.addEventListener("mousemove", (e) => {
        if (mouseIsHoveringBtn) {
            let rect = btn.getBoundingClientRect();
            btn.style.transform = `scale(1.05) translate(${
                (e.clientX - rect.left - rect.width / 2) / 12
            }px,${(e.clientY - rect.top - rect.height / 2) / 12}px)`;
        }
    });
});

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

// HIDE MISE IF MOBILE
if (
    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
    )
) {
    document.getElementById('mouse').hidden = true;
}
