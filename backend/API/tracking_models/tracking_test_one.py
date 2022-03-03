import numpy as np
import cv2

# initialize camera
cap = cv2.VideoCapture(0)

while True:
    ret, frame = cap.read()
    hsv = cv2.cvtColor(frame, cv2.COLOR_BGR2HSV)

    # define green color area
    lowerLimit = np.array([38, 100, 100])
    upperLimit = np.array([75, 255, 255])

    mask = cv2.inRange(hsv, lowerLimit, upperLimit)
    
    result = cv2.bitwise_and(frame, frame, mask=mask)

    cv2.imshow('Frame Origianal', frame)
    cv2.imshow('Frame trackable Green', result)

    if(cv2.waitKey(1) & 0xFF == ord('q')):
        break