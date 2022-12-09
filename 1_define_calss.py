class Person:
    def __init__(self, name, sex, profession) :
     # __init__ is a special method in Python
     # It is called when an object is created
     # It is used to initialize the attributes of the class
     # self is a reference to the current instance of the class
     # and is used to access variables that belong to the class
     # It does not have to be named self , you can call it whatever you like,
     # but it has to be the first parameter of any function in the class
     # self.name is the attribute name
     # name is the parameter name
     # data members of the class (instance variables)
        self.name = name
        self.sex = sex 
        self.profession = profession
        
    def show(self):
        print("Name: ", self.name, 'Sex', self.sex, 'Profession', self.profession)
    def work(self):
        print(self.name, 'is working as a ', self.profession)
# create an object of Person class
jessa = Person('Jessa', 'Female', 'Doctor')

#call the show method and work method
jessa.show()
jessa.work()