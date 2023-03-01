import axios from "axios";
import React, { useEffect, useState } from "react";
import { useNavigate } from "react-router-dom";
import Card from "../../components/Card";

const Home = () => {
  const [users, setUsers] = useState([]);
  const [usersState, setUsersState] = useState(true)
  const navigate = useNavigate()

  const goCreateUser = () =>{
    navigate('/register')
  }

  useEffect(() => {
    const URL = "http://localhost:8000/api/usuarios";
    axios.get(URL).then((res) => {
      setUsers(res.data)
    });
  }, [usersState]);

  return (
    <div>
        <h1>Crud</h1>
        <h5>Ususarios: </h5>
        <button onClick={goCreateUser}>Crear nuevo usuario</button>
      {users.map((user) => (
        <Card
          key={user.id}
          fullName={user.fullName}
          email={user.email}
          birthdate={user.birthdate}
          id={user.id}
          imgProfile={user.profile_pictures}
          setUsersState={setUsersState}
          usersState={useState}
        />
      ))}
    </div>
  );
};

export default Home;
