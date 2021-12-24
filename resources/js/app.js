require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import flatpickr from "flatpickr";
import { Portuguese } from "flatpickr/dist/l10n/pt.js"

require("flatpickr/dist/themes/material_blue.css");