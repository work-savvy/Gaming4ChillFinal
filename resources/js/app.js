import './bootstrap';

import Alpine from 'alpinejs';

import {library, dom} from '@fortawesome/fontawesome-svg-core';
import {fas} from '@fortawesome/free-solid-svg-icons';
import {fab} from '@fortawesome/free-brands-svg-icons';

library.add(fas, fab);

dom.watch();

window.Alpine = Alpine;

Alpine.start();
