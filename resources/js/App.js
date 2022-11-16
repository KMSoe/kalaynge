import React from "react";
import AppStore from "/images/app_store.svg";
import PlayStore from "/images/play_store.svg";

function App() {
    const bgStyles = {
        backgroundImage: "url(/images/welcome.png)",
        backgroundRepeat: "no-repeat",
        backgroundPosition: "center",
        backgroundSize: "cover",
    };
    return (
        <div style={{ ...bgStyles, width: "100vw", height: "100vh" }}>
            <div className="wabsolute bottom-20 insert-x-1/2">
                <p className="text-blue-400 font-bold pb-8 lg:pb-6 text-center md:text-left fade-in">
                    Download our app:
                </p>

                <div className="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in">
                    <a href="#">
                        <img
                            src={AppStore}
                            alt="App Store"
                            className="h-12 pr-4 bounce-top-icons"
                        />
                    </a>
                    <a href="#">
                        <img
                            src={PlayStore}
                            alt="Play Store"
                            className="h-12 bounce-top-icons"
                        />
                    </a>
                </div>
            </div>
        </div>
    );
}

export default App;
