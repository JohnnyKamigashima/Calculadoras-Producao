
function distorC(medidaCliche, medidaCilindro, repeticoes) {
    return isNaN((medidaCilindro * 100) / (medidaCliche * repeticoes))
        ? 0
        : ((medidaCilindro * 100) / (medidaCliche * repeticoes)).toFixed(3);
};

var module = module || {};
module.exports = distorC;