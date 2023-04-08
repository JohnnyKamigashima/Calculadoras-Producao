function escalaPlano(medA, medR) {
    return isNaN((medR * 100) / medA)
        ? '0.00'
        : ((medR * 100) / medA).toFixed(2);
};

if (typeof module === "object") { module.exports = escalaPlano };