// src/components/CounterButton.jsx
import React, { useState } from "react";

const CounterButton = () => {
  const [count, setCount] = useState(0);

  return (
    <div>
      <p>Current count: {count}</p>
      <button
        onClick={() => setCount(count + 1)}
        style={{ padding: "0.5rem 1rem", cursor: "pointer" }}
      >
        Increment
      </button>
    </div>
  );
};

export default CounterButton;
