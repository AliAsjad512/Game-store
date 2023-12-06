


import React, { useState, useEffect } from 'react';
//import './App.css'; // Import the CSS file

const MyComponent = () => {
    const [stores, setStores] = useState([]);
    const [error, setError] = useState(null);

    useEffect(() => {
        const fetchStores = async () => {
            try {
                const response = await fetch('http://localhost/api/final.php');
                const data = await response.json();

                console.log('Response status:', response.status);
                console.log('Response data:', data);

                if (response.ok) {
                    setStores(data);
                } else {
                    setError(`Error: ${data.message || 'Unknown error'}`);
                }
            } catch (error) {
                setError('Error fetching data.');
            }
        };

        fetchStores();
    }, []);

    return (
        <div>
            <h2>Stores</h2>
            {error && <p>{error}</p>}
            <div className="stores-container">
                {stores.map(store => (
                    <div key={store.storeID} className={`store ${store.isActive ? 'active' : 'inactive'}`}>
                        <strong>{store.storeName}</strong> - {store.isActive ? 'Active' : 'Inactive'}
                        {store.images && (
                            <div className="image-container">
                                <img src={`https://www.cheapshark.com${store.images.banner}`} alt="Banner" />
                                <img src={`https://www.cheapshark.com${store.images.logo}`} alt="Logo" />
                                <img src={`https://www.cheapshark.com${store.images.icon}`} alt="Icon" />
                            </div>
                        )}
                    </div>
                ))}
            </div>
        </div>
    );
};

export default MyComponent;

