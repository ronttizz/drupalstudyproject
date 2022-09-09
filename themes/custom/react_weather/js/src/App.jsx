import React from "react";
import axios from "axios";
import { useEffect, useState } from "react";

const App = () => {
  const [weather, setWeather] = useState("weather");

  useEffect(() => {
    axios
      .get(
        "https://api.open-meteo.com/v1/forecast?latitude=60.20&longitude=24.94&current_weather=true"
      )
      .catch((error) => console.log(error))
      .then((res) => {
        console.log(res);
        setWeather(res.data);
      });
  }, []);

  return { weather } ? (
    <div>
      <h1>Helsinki Today</h1>
      <p>Temperature: {weather?.current_weather?.temperature} °C</p>
    </div>
  ) : (
    <p>Loading weather</p>
  );
};

export default App;
