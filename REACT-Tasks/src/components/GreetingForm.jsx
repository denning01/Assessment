// src/components/GreetingForm.jsx
import React, { useState } from "react";

const GreetingForm = () => {
  const [name, setName] = useState("");
  const [greeting, setGreeting] = useState("");

  const handleClick = () => {
    setGreeting(`Hello, ${name}!`);
  };

  return (
    <div>
      <input
        type="text"
        placeholder="Enter your name"
        value={name}
        onChange={(e) => setName(e.target.value)}
        style={{ padding: "0.5rem", marginRight: "0.5rem" }}
      />
      <button onClick={handleClick} style={{ padding: "0.5rem 1rem" }}>
        Greet
      </button>
      {greeting && <p style={{ marginTop: "0.5rem" }}>{greeting}</p>}
    </div>
  );
};

export default GreetingForm;
