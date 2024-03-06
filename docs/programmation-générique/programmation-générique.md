---
layout: default
chapitre: Programmation générique
order: 8
---
# Programmation générique

![generics](./programmation-générique/images/ginirique.png){:width}_Figure: programmation générique_


<!-- note -->
Lorsque nous écrivons des Classes, nous devons être capables de spécifier des types pour toutes les propriétés et méthodes qui existent dans la classe. Souvent, nous pouvons avoir besoin de modifier ces types pour différentes situations, ce à quoi servent les génériques. Sans génériques, nous aurions besoin de répéter notre code plusieurs fois, chaque fois avec un type différent. En utilisant des génériques, nous pouvons créer une définition de classe unique avec un espace réservé, que l'utilisateur peut spécifier au moment de la déclaration de l'objet.

<!-- new slide -->
## Exemple
```bash
 public function add(Request $request)
{
    $modelName = ucfirst(explode('.', Route::getCurrentRoute()->getName())[0]);
    $modelRepository = "\\App\\Repositories\\" . $modelName . "Repository";
    $modelRepository::create($request->validate(['name' => 'required|string|max:255']));
    return redirect()->back()->with('success', 'Record added successfully');
}

```
<!-- new slide -->
