// src/components/ConditionalRendering.jsx
import React, { useState } from "react";

const ConditionalRendering = () => {
  const [isLoggedIn, setIsLoggedIn] = useState(false);
  const username = "Denning";

  return (
    <div>
      <p>
        {isLoggedIn ? `Welcome, ${username}!` : "Hello, Guest!"}
      </p>
      <button
        onClick={() => setIsLoggedIn(!isLoggedIn)}
        style={{ marginTop: "0.5rem", padding: "0.5rem 1rem", cursor: "pointer" }}
      >
        Toggle Login
      </button>
    </div>
  );
};

export default ConditionalRendering;
