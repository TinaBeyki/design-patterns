=>Bridge:

(Structural Design Pattern)

this design pattern lets you split a large class or a set of closely related classes into two seperated hierarchies-
abstraction and implementation-which can be developed independently of each other.


=>Applicability:
use the bridge pattern when you want to divide and organize monolithic class that has several variants of some functionality

The bigger a class becomes, the harder it is to figure out how it works, and the longer it takes to make a change.
The changes made to one of the variations of functionality may require making changes across the whole class,
which often results in making errors or not addressing some critical side effects.

The Bridge pattern lets you split the monolithic class into several class hierarchies.
After this, you can change the classes in each hierarchy independently of the classes in the others.
This approach simplifies code maintenance and minimizes the risk of breaking existing code.

=>Relations with Other Patterns
Bridge is usually designed up-front, letting you develop parts of an application independently of each other.
On the other hand, Adapter is commonly used with an existing app to make some otherwise-incompatible classes work together nicely.

Bridge, State, Strategy (and to some degree Adapter) have very similar structures.
Indeed, all of these patterns are based on composition, which is delegating work to other objects.
However, they all solve different problems. A pattern isn’t just a recipe for structuring your code in a specific way.
It can also communicate to other developers the problem the pattern solves.

You can use Abstract Factory along with Bridge.
This pairing is useful when some abstractions defined by Bridge can only work with specific implementations.
In this case, Abstract Factory can encapsulate these relations and hide the complexity from the client code.

You can combine Builder with Bridge: the director class plays the role of the abstraction,
while different builders act as implementations.