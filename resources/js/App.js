import React from "react";
import AppStore from "/images/app_store.svg";
import PlayStore from "/images/play_store.svg";
import Kalaynge from "/images/kalaynge.svg";

function App() {
    const bgStyles = {
        backgroundImage: "url(/images/welcome.png)",
        backgroundRepeat: "no-repeat",
        backgroundPosition: "center",
        backgroundSize: "cover",
    };

    const downloadStyle = {
        width: "180px"
    }

    return (
        <div style={{ ...bgStyles, width: "100vw", height: "100vh" }}>
            <div className="position-absolute top-50 start-50 translate-middle text-center" >
                <img src={Kalaynge} alt="Kalaynge Logo" className="mb-5" style={{ width: "300px" }} />
                <div className="tex-center mx-auto" style={{ width: "380px", }}>
                    <h3 className="text-white font-bold pb-8 lg:pb-6 text-center mb-5">
                        Download App:
                    </h3>

                    <div className="flex justify-content-center">
                        <a href="#">
                            <img
                                src={AppStore}
                                alt="App Store"
                                style={downloadStyle}
                            />
                        </a>
                        <a href="#" >
                            <img
                                src={PlayStore}
                                alt="Play Store"
                                style={{ ...downloadStyle, marginLeft: "20px" }}
                            />
                        </a>
                    </div>
                </div>
            </div>

        </div>
    );
}

export default App;
