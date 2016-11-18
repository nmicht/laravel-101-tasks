# Tasks Project
## Proyecto para manejo de tareas y gestión de proyectos como practica del taller de Laravel.

### Funciones
- **CRUD tasks**
 1. Los tasks tienen un nombre, una descripción, prioridad, creador, y colaboradores.
 1. Al crear las tareas, el creador se asigna automáticamente tomando el usuario con sesión activa.
 1. Al crear la tarea se pueden asignar colaboradores tomandose de una lista de todos los usuarios disponibles.
 1. El sistema debe tener un set de al menos 10 tasks dummies.
 1. En el listado se debe poder acceder a acciones como edición y eliminación solo si soy el dueño de la tarea.
 1. En el listado de tareas se muestran todas las tareas sin importar de quien son, si la tarea es mia o estoy asignado a ella aparece algun simbolo, y debe indicar cuantos días han transcurrido desde su creación.
 1. Al mostrar una tarea se muestran todos los colaboradores, su proyecto y la demás información
- **CRUD projects**
 1. Los proyectos tienen nombre
 1. Los proyectos tienen tareas
 1. Cualquier usuario puede eliminar un proyecto siempre y cuando no tenga tareas
