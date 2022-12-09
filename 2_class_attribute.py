class Student:
    # class attribute
    school_name = "DPS School"

    # instance attribute (constructor)
    def __init__(self, name, age):
        # instance attribute (instance variable)
        self.name = name
        self.age = age
s1 = Student("Jessa", 23)
# access the class attribute using the class name and (access instance variable)
print('Student: ', s1.name, 'Age: ', s1.age)

# access class variable using the class name
print('School Name: ', Student.school_name)

#modify the instance variable
s1.name = 'Jessa'
s1.age = 14
print('Student: ', s1.name, 'Age: ', s1.age)

#modify the class variable
Student.school_name = 'ABC School'
print('School Name: ', Student.school_name)