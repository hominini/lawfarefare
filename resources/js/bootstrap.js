window.UIkit = require("uikit");
window.Icons = require("uikit/dist/js/uikit-icons");

UIkit.use(window.Icons);

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-with'] = 'XMLHttpRequest';