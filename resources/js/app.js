require('./bootstrap');
window.mobileCheck = function() {
    const mobile_regex = /android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i;
    const agent = navigator.userAgent.toLowerCase();
    return mobile_regex.test(agent);
  };
  