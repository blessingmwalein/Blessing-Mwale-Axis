
function findRoots(a, b, c) {

    // If a is 0, then equation is not
        // quadratic, but linear
  
    if (a == 0) {
        console.log('Invalid');
        return;
    }
    let d = b * b - 4 * a * c;
    let sqrt_val = Math.sqrt(Math.abs(d));
    if (d > 0) {
        //Roots are real and different
        console.log('Roots are, ' + (-b + sqrt_val) / (2 * a) + ','
            + (-b - sqrt_val) / (2 * a));
    }
    else if (d == 0) {
        //Roots are real and same
        console.log(
            "Roots are");
        console.log(-b / (2 * a) + ','
            + -b / (2 * a));
    }
    else
    {
        //Roots are complex
        console.log("Roots are");
        console.log(); (-b / (2 * a) + " + i"
            + sqrt_val +
            + -b / (2 * a)
            + " - i" + sqrt_val);
    }
}
var a = 1, b = -7, c = 12;
findRoots(a, b, c);

