import React from "react";
import CounterButton from "./components/CounterButton";
import ConditionalRendering from "./components/ConditionalRendering";
import FruitsList from "./components/FruitsList";
import GreetingForm from "./components/GreetingForm";
import Header from "./components/Header";

const App = () => {
  return (
    <div style={{ padding: "2rem" }}>
      <Header title="My React App Tasks" />
      <hr />
      <h2>Task 1: Counter Button</h2>
      <CounterButton />
      <hr />
      <h2>Task 2: Conditional Rendering</h2>
      <ConditionalRendering />
      <hr />
      <h2>Task 3: Fruits List</h2>
      <FruitsList />
      <hr />
      <h2>Task 4: Greeting Form</h2>
      <GreetingForm />
    </div>
  );
};

export default App;
