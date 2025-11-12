import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import ItemComponent from './components/ItemComponent'
import Button from 'react-bootstrap/Button';


function App() {
    var x=0
    //React Hooks
    let [contador, setContador] = useState(10)
    let[arr,setArr]=useState([])
    let clickBoton=()=>{
        setContador(++contador)
        console.log(contador)
        let x=[...arr, contador]
        setArr(x)
    }
  return (
    <>
      <h1>Contador</h1>
      <p>{contador}</p>
      <Button variant="danger">Danger</Button>
      <button onClick={clickBoton}>Aumentar</button>
      { arr.map((item)=>(<ItemComponent key={item}/>)) }
      
      
    </>
  )
}

export default App
