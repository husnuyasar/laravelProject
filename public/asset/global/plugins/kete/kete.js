/**
 * KeteJS
 * 
 * KeteJS is simple and very very little "into the middle" javascript templating engine.
 * (At least, we think this way about that)
 * 
 * ICC Software Development Team
 * 2018-09-26 19:00
 * 
 * 
 */

var Kete = function(hamur, malzeme) {
    var re = /\{([^\}]+)?\}/g, match;
    while(match = re.exec(hamur)) {
        hamur = hamur.replace(match[0], malzeme[match[1]])
    }
    return hamur;
}