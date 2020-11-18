const createElement = (tag, attributes = {}) => {
    if (/(?![^a-z0-9])^[a-z][a-z0-9]*$/i.test(tag) && attributes instanceof Object){
        const element = document.createElement(tag);
        for(let key in attributes){
            if(element[key] != undefined){
                element[key] = attributes[key];
            } else {
                element.setAttribute(key, attributes[key]);
            }
        }
        return element;
    }
}
