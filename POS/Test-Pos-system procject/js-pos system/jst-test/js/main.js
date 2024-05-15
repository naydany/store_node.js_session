import {save, getData} from '../utils/localstorange.js';
import { getElement, getElements } from '../utils/elements.js';

save("test", "Hello world")

console.log(getData("test"));

console.log(getElements("li"));