---
layout: default
chapitre: Diagramme de packages
order: 6
---


# Diagramme de packages


![Diagramme de packages](./diagramme-de-packages/images/diagramme-des-packages.png){:width}*Figure: Diagramme de packages*

<!-- note -->
Les diagrammes de package (ou diagramme de paquetages) sont des diagrammes structurels utilisés pour représenter l'organisation et la disposition de divers éléments modélisés sous forme de paquetages. Un paquetage est un regroupement d'éléments UML apparentés, tels que des diagrammes, des documents, des classes ou même d'autres paquetages.

- Package **Projets** : Il s'agit d'un package (ou module) au sein du système logiciel qui contient vraisemblablement des classes de modèle et de contrôleur, des éléments de base de données, des interfaces ou d'autres composants liés à des projets.
- Package **Taches** : Il s'agit d'un package (ou module) au sein du système logiciel qui contient vraisemblablement des classes de modèle et de contrôleur, des éléments de base de données, des interfaces ou d'autres composants liés à des tâches.
- Relation : **<<import>>** : La relation "<<import>>" entre le package Taches et le package Projets signifie que le package Taches importe des éléments du package Projets.
  

<!-- new slide -->
