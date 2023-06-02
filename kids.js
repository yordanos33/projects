
import React from 'react';
import { ScrollView,Imagebackground,Image,Button,Text,View,StyleSheet,TouchableOpacity} from 'react-native';

export default function KidsLearnigApp(props) {
   const  qu=props.q;
    
  return (
     

    
        <View style={styles.container}>
              <View style={styles.headerContainer}>
                  <View style={styles.imageCont}>  
                   <Image style={styles.image} source={require('../assets/header.jpg')}/>      
                  </View>
              </View>
              <View style={styles.askCont}>
                  <View style={styles.imgCont}> 
                  <Image style={styles.image1} source={require('../assets/nose.jpg')} />            
                  </View>
                  <View style={styles.btnCont}>
                      <View style={styles.v1}>
                          <View style={styles.btn1}>
                              <TouchableOpacity style={{width:50,height:20,borderRadius:15,backgroundColor:'pink'}}>
                                  <Text style={{color:'red',fontWeight:'bold',}}>A. Eye</Text>
                              </TouchableOpacity>
    
                          </View>
                          <View style={styles.btn2}>
                          <TouchableOpacity style={{width:50,height:20,borderRadius:15,backgroundColor:'pink'}}>
                                  <Text style={{color:'red',fontWeight:'bold',}}>B. Nose</Text>
                              </TouchableOpacity>
    
                          </View>
    
                      </View>
                      <View style={styles.v2}>
                          <View style={styles.btn3}>
                          <TouchableOpacity style={{width:50,height:20,borderRadius:15,backgroundColor:'pink'}}>
                                  <Text style={{color:'red',fontWeight:'bold',}}>C. Leg</Text>
                              </TouchableOpacity>
                          </View>
                          <View style={styles.btn4}>
                          <TouchableOpacity style={{width:60,height:20,borderRadius:15,backgroundColor:'pink'}}>
                                  <Text style={{color:'red',fontWeight:'bold',}}>D. Teeth</Text>
                              </TouchableOpacity>
                          </View>
    
                      </View>
                      <View style={styles.v3}>
    
                      </View>
    
                  </View>
                 
                  
                  
              </View>
              <View style={styles.askCont}>
                  <View style={styles.imgCont}> 
                  <Image style={styles.image1} source={require('../assets/ear.jpg')} />            
                  </View>
                  <View style={styles.btnCont}>
                      <View style={styles.v1}>
                          <View style={styles.btn1}>
                              <TouchableOpacity style={{width:50,height:20,borderRadius:15,backgroundColor:'pink'}}>
                                  <Text style={{color:'yellow',fontWeight:'bold',}}>A. Ear</Text>
                              </TouchableOpacity>
    
                          </View>
                          <View style={styles.btn2}>
                          <TouchableOpacity style={{width:50,height:20,borderRadius:15,backgroundColor:'pink'}}>
                                  <Text style={{color:'yellow',fontWeight:'bold',}}>B. Leg</Text>
                              </TouchableOpacity>
    
                          </View>
    
                      </View>
                      <View style={styles.v2}>
                          <View style={styles.btn3}>
                          <TouchableOpacity style={{width:60,height:20,borderRadius:15,backgroundColor:'pink'}}>
                                  <Text style={{color:'yellow',fontWeight:'bold',}}>C. Hand</Text>
                              </TouchableOpacity>
                          </View>
                          <View style={styles.btn4}>
                          <TouchableOpacity style={{width:60,height:20,borderRadius:15,backgroundColor:'pink'}}>
                                  <Text style={{color:'yellow',fontWeight:'bold',}}>D. Teeth</Text>
                              </TouchableOpacity>
                          </View>
    
                      </View>
                      <View style={styles.v3}>
    
                      </View>
    
    
    </View>
                 
                  
                  
              </View>
        </View>
    
        );
    }
    
    const styles = StyleSheet.create({
        container:{
         flex:1,
        
        },
        headerContainer:{
            flex:1,
            justifyContent:'center',
            alignItems:'center'
        },
        imageCont:{
            width:300,
            height:170,
            backgroundColor:'white',
    
    
        },
        image:{
            width:300,
            height:170
        },
        askCont:{
            flex:0.8,
            flexDirection:'row',
            justifyContent:'space-evenly'
    
        },
        imgCont:{
            width:100,
            height:100,
            marginTop:5
          
        },
        image1:{
            width:100,
            height:100,
            borderRadius:20
    
        },
        btnCont:{
          width:150,
          height:120,
          marginTop:5,
        },
        v1:{
            width:'auto',
            height:40,
            flexDirection:'row',
            justifyContent:'space-evenly'
    
        },
        v2:{
            width:'auto',
            height:40,
            flexDirection:'row',
            justifyContent:'space-evenly'
    
        },
        v3:{
            width:'auto',
            height:40,
            backgroundColor:'black'
    
        },
        btn1:{
            width:50,
            height:20,
        },
        btn2:{
            width:50,
            height:20,
        },
        btn3:{
            width:50,
            height:20,
        },
         btn4:{
            width:60,
            height:20,
        },
    
    })
    
   
              
              
         
             
              
              
          

