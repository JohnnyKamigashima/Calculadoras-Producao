function decodeHTMLEntities(text) {
    let element = document.createElement('div');
    element.innerHTML = text;
    return element.textContent;
}

if (typeof module === "object") { module.exports = decodeHTMLEntities }