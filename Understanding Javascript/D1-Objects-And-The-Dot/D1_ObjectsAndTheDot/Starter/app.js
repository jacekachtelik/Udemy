var person = new Object();
person["firstName"] = "Jacek";
person["lastName"] = "Achtelik";

var firstNameProperty = "firstName";

console.log(person[firstNameProperty]);
console.log(person.firstName + ' ' + person.lastName);
person.address = new Object();
person.address.street = "Nowokościelna";
person.address.building = 50;
person.address.code = "43-100";
person.address.city = "Tychy";
person.address.province = "śląskie";

console.log(person);

var Jacek = {
    firstName: "Jacek",
    lastName: "Achtelik",
    address: {
        street: "Nowokościelna",
        building: 50,
        code: "43-100",
        city: "Tychy",
        province: "śląskie"
    }
};
console.log(Jacek);

function greet(person) {
    console.log("Cześć: ".person.firstName);
}
greet(Jacek);

greet({
	firstName: "Patrycja",
	lastName: "Achtelik"
});