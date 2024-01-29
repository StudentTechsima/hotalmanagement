gsap.to(".mainHeader",{
    height:"",
    position:"fixed",
    top:"0",
    backgroundColor:"rgba(0,0,0,.3)",
    duration:.5,
    fontSize:"12px",
    scrollTrigger:{
        trigger:".mainHeader",
        scoller:"body",
        //markers:true,
        start:"top -2.5%",
        end:"top -5%",
        scrub:.1
    }
})
gsap.to("#main",{
    backgroundColor:"rgba(0, 0, 0,.8)",
    scrollTrigger:{
        trigger:"#main",
        scroller:"body",
        start:"top -30%",
        end :"top -60%",
        scrub:2
    }
})
gsap.to(".hero-bg",{
    scrollTrigger:{
        trigger:"#main",
        scroller:"body",
        start:"top -30%",
        end :"top -60%",
        scrub:2
    }
})
gsap.from(".heading1-white-scroll",{
    y:300,
    duration:.5,
    scrub:4,
    stagger:.5,
    transform:"scale(0)",
    force3D: true
})
gsap.from(".scrolltrigger",{
    y:300,
    duration:.5,
    stagger:.3,
    scrub:3,
    transform:"scale(1.5) rotatey(180deg)"
    
})