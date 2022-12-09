class Employee: 
    depatment = "IT"
    
    def show(self):
        print('Department is :', self.depatment)
emp = Employee()
emp.show()

# delete the Object 
del emp 
#accesing the object after deleting it will throw an error
emp.show()
# output: NameError: name 'emp' is not defined
