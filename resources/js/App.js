import React from 'react';
import { Route } from "react-router-dom";
import WelcomeImg from './assets/images/welcome.png'

function App() {
    const bgStyles = {
        backgroundImage: "url(/images/welcome.png)",
        backgroundRepeat: "no-repeat",
        backgroundPosition: "center",
        backgroundSize: "cover",
    }
    return (
        <div style={{ ...bgStyles, width: "100vw", height: "100vh" }}>

        </div>
    );
}

export default App;
