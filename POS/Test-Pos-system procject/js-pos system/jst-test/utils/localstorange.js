export function save(key, value) {
    localStorage.setItem(key, JSON.stringify(value));
}

export function getData(key) {
   return localStorage.getItem(key);
}
