/**
 * Simple Javascript function
 * that is used for hiding the loader
 */
function hideLoader() {

    /**
     * Using setTimeout() before
     * calling "function hideLoader()"
     */
    setTimeout(function() {

        document.getElementById("load_screen").style.display = 'none';

    }, 1500); // time = milliseconds (1500ms / 1000 = 1,5sec)
}