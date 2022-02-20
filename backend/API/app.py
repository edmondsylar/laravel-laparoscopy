from email import parser
from flask import Flask
from flask_restful import Resource, Api, reqparse
import cv2
from imutils.video import VideoStream

app = Flask(__name__)
api = Api(app)

class Recording(Resource):
    def __rec(self, name):
        # append the name of the video with the required extenstion.
        _ = name+".mp4"
        # vs = VideoStream(src=1).start() # initialize the videoStream
        vs = cv2.VideoCapture(1) # initialize the videoStream

        # define the codec and create a VideoWriter object. The output is stored in the name (_)
        # out = cv2.VideoWriter(_, cv2.VideoWriter_fourcc('M', 'J', 'P', 'G'), 10, (frame_width, frame_height))

        # lets define the window sizes
        vs.set(3,640)
        vs.set(4,480)

        fourcc = cv2.VideoWriter_fourcc(*'MP4V')
        out = cv2.VideoWriter(_, fourcc, 20.0, (640,480))

        # out = cv2.VideoWriter(_, cv2.VideoWriter_fourcc())
        
        # iterate over the  frame.
        while True:
            ret, frame = vs.read()
            
            # write to the output video here.
            out.write(frame)

            cv2.imshow('Frame', frame)
            if cv2.waitKey(25) & 0xFF == ord('q'):
                break
            
        # 
        vs.release()
        out.release()
        cv2.destroyAllWindows() # close all the windows and destroy all the sessions.
        return _

    def get(self):
        parser = reqparse.RequestParser()
        parser.add_argument('_session', required=True) #this it the session name we need 
        args = parser.parse_args()

        if args['_session']:
            name = args['_session']
            recording = self.__rec(name)
            return {'response Name':recording}
            # pass

class Index(Resource):
    def get(self):
        return {'Response': 'You reached the home route of the API'}, 200


api.add_resource(Recording, '/record') # /recording the video
api.add_resource(Index, '/') # /recording the video

if __name__ == '__main__':
    app.run(debug=True) #run our Flask app