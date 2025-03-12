document.addEventListener("DOMContentLoaded", function () {
    const KHOR = typeof BakongKHOR !== "undefined" ? BakongKHOR : null;

    if (KHOR) {
        const data = KHOR.khqrData;
        const info = KHOR.IndividualInfo;

        const optionalData = {
            currency: data.currency.usd,
            amount: 100.5,
            mobileNumber: "85512233455",
            storeLabel: "Coffee Shop",
            terminalLabel: "Cashier 1",
            purposeOfTransaction: "Oversea",
            languagePreference: "KM",
            merchantNameAlternateLanguage: "ហាងកាហ្វេ",
            merchantCityAlternateLanguage: "ភ្នំពេញ",
            upiMerchantAccount: "0001014408810344ABCDEFGHIKLMNO"
        };

        const individualInfo = new info("morn_sovathana@amkb", "morn sovathana", "PHNOM PENH", optionalData);
        const khqrInstance = new KHOR.BakongKHQR();
        const individual = khqrInstance.generateIndividual(individualInfo);

        // Function to display QR code in the modal
        const displayQRCode = () => {
            if (individual && individual.data && individual.data.qr) {
                const qrCodeCanvas = document.getElementById("qrCodeCanvas");
                // Generate the QR code onto the canvas
                QRCode.toCanvas(qrCodeCanvas, individual.data.qr, function (error) {
                    if (error) console.error(error);
                });

                // Show the modal
                const qrCodeModal = new bootstrap.Modal(document.getElementById("qrCodeModal"));
                qrCodeModal.show();
            } else {
                console.error("QR code data is not available.");
            }
        };

        // Attach event listeners for the checkout buttons
        const checkoutButton = document.getElementById("checkout");
        if (checkoutButton) {
            checkoutButton.addEventListener("click", displayQRCode);
        } else {
            console.error("Checkout button or its components are not loaded or defined.");
        }
    } else {
        console.error("BakongKHOR is not defined.");
    }
});