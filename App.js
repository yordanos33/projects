//import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View } from 'react-native';
import React, { Component } from 'react';
import KidsLearnigApp from './kids_app/kids';
import  React,{ useState } from 'react';
export default function App() {
  const [Quiz,Setquiz]=useState([
    {
image:'require(./asset/bg.jpg)', a:"nose",b:'ear',c:'leg',d:'eye',id:1
    },
    {
    image:'require(./asset/bg.jpg', a:"nose",b:'ear',c:'leg',d:'eye',id:2
    },
    {
      image:'require(./asset/bg.jpg', a:"nose",b:'ear',c:'leg',d:'eye',id:3
    }
  ]) 
  return (
    <View style={styles.container}>
      
      <KidsLearnigApp q={Quiz}/>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    //backgroundColor: 'lightblue',
    alignItems: 'center',
    justifyContent: 'flex-start',
    
    },
});
