import '../styles/app.scss';

import axios from "./utils/axios/axios";
import modules from "./modules";

import 'lazysizes';
import 'lazysizes/plugins/parent-fit/ls.parent-fit';

import lazyload from "./module/lazyload/lazyload";

lazyload.init(axios, modules)