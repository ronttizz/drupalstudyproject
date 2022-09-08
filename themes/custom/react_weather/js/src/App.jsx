import React from "react";
import axios from "axios";
import { useEffect, useState } from "react";

const App = () => {
  const [weather, setWeather] = useState("weather");

  useEffect(() => {
    axios
      .get("https://jsonplaceholder.typicode.com/users")
      .catch((error) => console.log(error))
      .then((res) => {
        console.log(res);
      });
    setWeather("weather working");
  }, []);

  return <h1>{weather}</h1>;
};

export default App;
