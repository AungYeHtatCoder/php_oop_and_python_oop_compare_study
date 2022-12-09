class Student {
  // class variable
  static schoolName = 'ABC School';

  // constructor
  constructor(name, age) {
    // instance variables
    this.name = name;
    this.age = age;
  }

  // instance method
  show() {
    // access instance variables and class variables
    console.log(`Student: ${this.name} ${this.age} ${Student.schoolName}`);
  }

  // instance method
  changeAge(newAge) {
    // modify instance variable
    this.age = newAge;
  }

  // class method
  static modifySchoolName(newName) {
    // modify class variable
    Student.schoolName = newName;
  }
}

const s1 = new Student('Harry', 12);

// call instance methods
s1.show();
s1.changeAge(14);

// call class method
Student.modifySchoolName('XYZ School');

// call instance methods
s1.show();
