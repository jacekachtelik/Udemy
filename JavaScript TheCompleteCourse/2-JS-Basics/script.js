/*
var name = 'Jacek';
console.log(name);

var lastName = 'Achtelik';
console.log(lastName);

var age = 37;
console.log(age);

var fullAge = true;
console.log(fullAge);

console.log('Imię: ' + name + ' wiek: ' + age);
console.log(age + age);

var job, isMaried;
console.log(job);

job = 'IT Specialist';
isMaried = true;

var data = 'Imię: ' + name + ' wiek: ' + age + ' zawód: ' + job + ' żonaty: ' + isMaried;
console.log(data);
// alert(data);

var ageJohn = 30;
var ageMark = 32;
console.log('Wiek Johna: ' + ageJohn + ', wiek Mark-a ' + ageMark);

ageJohn = ageMark = (3 + 4) * 3 - 6;
console.log('Wiek Johna: ' + ageJohn + ', wiek Mark-a ' + ageMark);
ageJohn++;
ageMark *= 2;
console.log('Wiek Johna: ' + ageJohn + ', wiek Mark-a ' + ageMark);

*/
/*
var playerAHeight = prompt('Podaj wzrost gracza A');
var playerAAge = prompt('Podaj wiek gracza A');
var playerBHeight = prompt('Podaj wzrost gracza B');
var playerBAge = prompt('Podaj wiek gracza B');
var playerCHeight = prompt('Podaj wzrost gracza C');
var playerCAge = prompt('Podaj wiek gracza C');
var playerAScore = calculate(playerAHeight, playerAAge);
var playerBScore = calculate(playerBHeight, playerBAge);
var playerCScore = calculate(playerCHeight, playerCAge);
// 
function calculate(heigt, age) {
    return heigt + (5*age);
}
console.log('Gracz A - wzrost: ' + playerAHeight + ', wiek: ' + playerAAge + ', wynik: ' + playerAScore + ' pkt.');
console.log('Gracz B - wzrost: ' + playerBHeight + ', wiek: ' + playerBAge + ', wynik: ' + playerBScore + ' pkt.');
console.log('Gracz C - wzrost: ' + playerCHeight + ', wiek: ' + playerCAge + ', wynik: ' + playerCScore + ' pkt.');
if (playerAScore > playerBScore && playerAScore > playerCScore) {
    if (playerBScore > playerCScore) {
        console.log('Gracz A zwyciężył!, drugi jest gracz B, trzeci gracz C');
    } else {
        console.log('Gracz A zwyciężył!, drugi jest gracz C, trzeci gracz B');
    }
    
} else if(playerBScore > playerAScore && playerBScore > playerCScore) {
    if (playerAScore > playerCScore) {
        console.log('Gracz B zwyciężył!, drugi jest gracz A, trzeci gracz C');
    } else {
        console.log('Gracz B zwyciężył!, drugi jest gracz C, trzeci gracz A');
    }
} else {
    if (playerAScore > playerBScore) {
        console.log('Gracz C zwyciężył!, drugi jest gracz A, trzeci gracz B');
    } else {
        console.log('Gracz C zwyciężył!, drugi jest gracz B, trzeci gracz A');
    }
}
*/

/*
var year = 1979;
console.log('Rok narodzin: ' + year);
function calculateAge(yearOfBirth) {
    var currentYear = new Date().getFullYear();
    // console.log('Rok bieżący: ' + currentYear);
    return (new Date()).getFullYear() - yearOfBirth;
}
var age = calculateAge(year);
console.log(age);

function yearForRetirement(name, yearOfBirth) {
    var age = calculateAge(yearOfBirth);
    var retirement = 67 - age;
    if (retirement >= 0) {
        console.log(name + ' ma do emerytury: ' + retirement + ' lat');
    } else {
        console.log(name + ' jest na emeryturze od: ' + retirement * (-1) + ' lat');
    }
    
}

yearForRetirement('John',1990);
yearForRetirement('John',1968);
yearForRetirement('John',1945);
*/

//// Arrays ////
/*
var names = ['John','Jake','Mike'];
var years = new Array(1990,1969,1948);
// console.log(names[0]);
console.log(names);
names[1] = 'Ben';
console.log(names);

var john = ['John','Smith',1990,'teacher',false];
john.push('blue');
john.unshift('Mr.');
john.pop();
john.shift();

console.log(john);
console.log(john.indexOf('Smith'));

if (john.indexOf('teacher') === -1) {
    console.log('John nie jest nauczycielem');
} else {
    console.log('John jest nauczycielem');
} */

//// Objects ////
//v1.0
/*
var john = {
    name: 'John',
    lastName: 'Smith',
    yearOfBirth: 1990,
    isMaried: false,
    job: 'teacher',
    family: ['Jane','Mark','Susan'],
    calculateAge: function() {
        return (new Date()).getFullYear() - this.yearOfBirth;
    }
}


console.log(john.calculateAge());

var age = john.calculateAge();
john.age = age;
console.log(john);
*/
/*
console.log(john.lastName);
console.log(john['lastName']);
var xyz = 'job';
console.log(john[xyz]);

john.lastName = 'Miller';
john['job'] = 'programmer';
console.log(john);

var jane = new Object();
jane.name = 'Jane';
jane.lastName = 'Smith';
jane['yearOfBirth'] = 1969;
jane['job'] = 'teacher';
jane['isMarried'] = true;
console.log(jane);
*/

/*
var john = {
    name: 'John',
    lastName: 'Smith',
    yearOfBirth: 1990,
    isMaried: false,
    job: 'teacher',
    family: ['Jane','Mark','Susan'],
    calculateAge: function() {
        this.age = (new Date()).getFullYear() - this.yearOfBirth;
    }
}
john.calculateAge();
console.log(john);
*/

/////////
// Loops
/*
for (var i = 0; i < 10; i++) {
    console.log(i);
}

var names = ['Jan','Kasia','Marta','Ania','Tomek','Andrzej'];
for (var i = 0; i < names.length; i++) {
    console.log(names[i]);
}

for (var i = names.length; i >= 0; i--) {
    console.log(names[i]);
}
*/
var i = 0;
// while (i < names.length) {
//     console.log(names[i]);
//     i++;
// }

for (var i = 0; i < 10; i++) {
    console.log(i);
    if (i === 3) {
        break;
    }
}

for (var i = 0; i < 10; i++) {
     if (i === 3) {
        continue;
    }
    console.log(i);
}