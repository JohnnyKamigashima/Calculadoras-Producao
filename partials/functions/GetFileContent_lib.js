export async function getFileContent(file) {
    let response = await fetch(file);
    let fileContent = await response.text();
    return fileContent;
}