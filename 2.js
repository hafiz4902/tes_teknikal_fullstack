n=[19,22,3,28,26,17,18,4,28,0];
function reverseArray(n) {
    var newArray = "";
    for (var i = n.length - 1; i >= 0; i--) {
        newArray += n[i];
    }
    return newArray;
}