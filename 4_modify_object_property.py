class Fruit:
    def __init__(self, name, color):
        self.name = name
        self.color = color
    def show(self):
        print('Name: ', self.name, 'Color: ', self.color)
        
#create an object of the class Fruit
obj = Fruit('Apple', 'Red')

# modify the Object property
obj.name = 'strawberry'

# call the instance method using the object
obj.show()

# output: Fruit is strawberry and color is Red