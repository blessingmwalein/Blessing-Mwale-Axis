function UniqueNames(name1, names2) {

    var array3 = name1.concat(names2).unique();
    return array3;
}


Array.prototype.unique = function () {
    var a = this.concat();
    for (var i = 0; i < a.length; ++i) {
        for (var j = i + 1; j < a.length; ++j) {
            if (a[i] === a[j])
                a.splice(j--, 1);
        }
    }
    return a;
};

 console.log(UniqueNames(['blessing', 'Tinashe', 'Mwale'], ['Tatenda', 'Munashe']));


