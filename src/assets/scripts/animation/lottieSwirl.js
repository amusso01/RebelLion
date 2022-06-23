import lottie from "lottie-web"

function lottieAnimation(ob){

  if(!ob.fileName){
    ob.fileName = ob.path;
  }else{
    ob.fileName = location.origin + '/wp-content/themes/FDRY/lottie/' + ob.fileName
  }

  const lottieAnimation = lottie.loadAnimation({
    container: ob.element, // the dom element that will contain the animation
    renderer: 'svg',
    loop: ob.loop,
    autoplay: ob.autoplay,
    path: ob.fileName // the path to the animation json
  });


  return lottieAnimation

}

export { lottieAnimation }