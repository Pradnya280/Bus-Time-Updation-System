


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{box-sizing: border-box;}
        body{
            margin: 0;background-image: linear-gradient(45deg ,rgb(255, 208, 0) 50%,rgb(1, 163, 1) 50%);
            height: 100vh;background-attachment: fixed;
        }
        .maindiv{
            height: auto;display: flex;flex-direction: column;align-items: center;
            max-width: 1200px;position: relative;left: 50%;transform: translate(-50% , 0 );
        }
        .link{
            height: 60px;width: 95%;background-color: white;border-radius: 4px;margin: 15px 0 10px 0 ;
        }
        .upload{
            height: auto;width: 95%;background-color: whitesmoke;border-radius: 4px;margin:  0 0 10px 0;
        }
        .uploaded{
            height: 3500px;width: 97%;margin: 1.5%;background-color: rgb(223, 223, 223);border-radius: 2px;padding: 10px;
        }
        .data{
            height: 60px;width: 98%;margin: 1%;background-color: rgb(76, 123, 177);border-radius: 4px;
            display: flex;justify-content: space-evenly;align-items: center;padding: 5px;
            position: sticky;bottom: 10px;
        }
        .fromdevice{
            height: 40px;width: 40px;border-radius: 50%;background-color: rgb(255, 255, 255,1);
            display: flex;justify-content: center;align-items: center;
        }
        .send{
            height: 40px;width: 40px;border-radius: 50%;background-color: rgba(255, 255,255, 1);
            display: flex;justify-content: center;align-items: center;
        }
        #txt{
            height: 40px;width: 60%;background-color: white;color: black;border: none;outline: none;
            border-radius: 5px;margin: 5px;
        }
        #fromdevicefiles{display: none;}
        img{width: 25px;}
        .uploadedmsg{width: 60%;margin: 10px 10px 10px 10px;background: chocolate;}
        .chat{width: 50%;margin: 5px;background: chocolate;padding: 10px ;border-radius: 10px;}
        .chat2{width: 50%;margin: 5px;background: rgb(20, 228, 48);padding: 10px ;border-radius: 10px;}
    </style>
</head>
<body>
    <div class="maindiv">
        <div class="link"></div>
        <div class="upload">
            <div class="uploaded"></div>
            <div class="data">
                <label class="fromdevice" for="fromdevicefiles"><input type="file" id="fromdevicefiles" multiple><img alt="uploadfiles" id="upload" src="https://img.icons8.com/external-tal-revivo-shadow-tal-revivo/96/000000/external-upload-processing-bar-with-upwards-arrow-logotype-upload-shadow-tal-revivo.png"/></label>
                <input type="text" id="txt">
                <div class="send"><img alt="send" src="data:image/png;base64,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"></div>
                </div>
            </div>
        </div>
    </div>
    

    <script>
        document.getElementById("fromdevicefiles").addEventListener('change' ,()=>{
            console.log( document.getElementById("fromdevicefiles").value)
        })
    </script>
    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.5.0/firebase-app.js";
        import { getFirestore,doc, getDoc,addDoc, collection,
             getDocs, onSnapshot, query, where,setDoc, orderBy, limit , Timestamp 
              } from "https://www.gstatic.com/firebasejs/9.5.0/firebase-firestore.js";
              import { getStorage, ref, uploadBytes , getDownloadURL } from "https://www.gstatic.com/firebasejs/9.5.0/firebase-storage.js";
        const firebaseConfig = {
          apiKey: "AIzaSyAvf6vgyMpevdKEeXtWRXK-B_3R_L3MfJk",
          authDomain: "authe-1d885.firebaseapp.com",
          databaseURL: "https://authe-1d885-default-rtdb.firebaseio.com",
          projectId: "authe-1d885",
          storageBucket: "authe-1d885.appspot.com",
          messagingSenderId: "780962254169",
          appId: "1:780962254169:web:936e4a0928c5aef4fa9048"
        };
      
        
        const app = initializeApp(firebaseConfig);
        const db = getFirestore(app);
        
      
        document.getElementsByClassName("send")[0].addEventListener('click' ,async function(){

            var time = (new Date().getTime())
        
            
          const docRef = await addDoc(collection(db, "group+messages"), {
                value:document.getElementById("txt").value,
                sentby:"vinay",
                time:time
            });
            document.getElementById("txt").value = "";

        })


       
        const q = query(collection(db, "group+messages") , orderBy("time" , "asc"));
        const unsubscribe = onSnapshot(q, (snapshot) => {
          snapshot.docChanges().forEach((change) => {
    if (change.type === "added") {
        //console.log("New city: ", change.doc.data());
        
        if (change.doc.data().sentby == "vinay") {
            var msgdiv = document.createElement("div")

                    msgdiv.className = "chat2"
                    msgdiv.innerHTML = change.doc.data().value
                    document.getElementsByClassName("uploaded")[0].appendChild(msgdiv)
        }else{
            var msgdiv = document.createElement("div")
                    msgdiv.className = "chat"
                    msgdiv.innerHTML = change.doc.data().value
                    document.getElementsByClassName("uploaded")[0].appendChild(msgdiv)
        }
    }
    if (change.type === "modified") {
        console.log("Modified city: ", change.doc.data());
    }
    if (change.type === "removed") {
        console.log("Removed city: ", change.doc.data());
    }
  });
});
      </script>
</body>
</html>