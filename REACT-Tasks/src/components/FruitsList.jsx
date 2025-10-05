// src/components/FruitsList.jsx
import React from "react";

const fruits = ["Apple", "Banana", "Mango", "Orange"];

const FruitsList = () => {
  return (
    <ul>
      {fruits.map((fruit, index) => (
        <li key={index}>{fruit}</li>
      ))}
    </ul>
  );
};

export default FruitsList;
