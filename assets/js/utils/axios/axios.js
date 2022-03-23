import axios from "axios";

const axiosInstance = axios.create();
axiosInstance.interceptors.response.use(function (response) {
    if (response.data.redirect)
        location.href = response.data.redirect;
    return response;
});

export default axiosInstance