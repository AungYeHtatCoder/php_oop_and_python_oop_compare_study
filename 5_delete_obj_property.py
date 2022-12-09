class Fruit: 
    def __init__(self, name, color): 
        self.name = name 
        self.color = color 
    def show(self): 
        print('Name: ', self.name, 'Color: ', self.color)
#create an object of the class Fruit
obj = Fruit('Apple', 'Red')

#delete the Object property
del obj.name
#Accessing obj property after deleting it will throw an error

print(obj.name)
# output: AttributeError: 'Fruit' object has no attribute 'name'