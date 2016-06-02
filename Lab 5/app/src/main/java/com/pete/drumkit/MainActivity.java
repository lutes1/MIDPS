package com.pete.drumkit;

import android.media.AudioManager;
import android.media.SoundPool;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.view.MotionEvent;
import android.view.View.OnTouchListener;



public class MainActivity extends AppCompatActivity {

    SoundPool hat_Sound,long_hat_Sound,clap_sound,kick_sound,snare_Sound,qsnare_sound;
    int hat_sound_ID,lhat_sound_ID,clap_sound_ID,kick_sound_ID,snare_sound_ID,qsnare_sound_ID;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //for hat
        hat_Sound = new SoundPool(1, AudioManager.STREAM_MUSIC,0);
        hat_sound_ID = hat_Sound.load(this,R.raw.hat,1);
        //for long hat
        long_hat_Sound = new SoundPool(1, AudioManager.STREAM_MUSIC,0);
        lhat_sound_ID = long_hat_Sound.load(this,R.raw.hat2,1);
        //for clap
        clap_sound = new SoundPool(1, AudioManager.STREAM_MUSIC,0);
        clap_sound_ID = clap_sound.load(this,R.raw.clap,1);
        //for kick
        kick_sound = new SoundPool(1, AudioManager.STREAM_MUSIC,0);
        kick_sound_ID = kick_sound.load(this,R.raw.kick,1);
        //for snare
        snare_Sound = new SoundPool(1, AudioManager.STREAM_MUSIC,0);
        snare_sound_ID = snare_Sound.load(this,R.raw.snare,1);
        //for qsnare
        qsnare_sound = new SoundPool(1, AudioManager.STREAM_MUSIC,0);
        qsnare_sound_ID = qsnare_sound.load(this,R.raw.snare_quiet,1);

        //referinte la butoane

        Button hat = (Button) findViewById(R.id.hat);
        Button lhat = (Button) findViewById(R.id.long_hat);
        Button clap = (Button) findViewById(R.id.clap);
        Button kick = (Button) findViewById(R.id.kick);
        Button snare = (Button) findViewById(R.id.snare);
        Button qsnare = (Button) findViewById(R.id.quiet_snare);

        //actiunile la ACTION_DOWN

        //hat
        hat.setOnTouchListener(new OnTouchListener() {

            @Override
            public boolean onTouch(View v, MotionEvent event) {
                if (event.getAction() == MotionEvent.ACTION_DOWN) {
                    hat_Sound.play(hat_sound_ID, 1, 1, 1, 0, 1);
                    return true;
                }

                return false;
            }
        });
        //for long hat
        lhat.setOnTouchListener(new OnTouchListener() {

            @Override
            public boolean onTouch(View v, MotionEvent event) {
                if (event.getAction() == MotionEvent.ACTION_DOWN) {
                    long_hat_Sound.play(lhat_sound_ID, 1, 1, 1, 0, 1);
                    return true;
                }

                return false;
            }
        });
        //for clap
        clap.setOnTouchListener(new OnTouchListener() {

            @Override
            public boolean onTouch(View v, MotionEvent event) {
                if (event.getAction() == MotionEvent.ACTION_DOWN) {
                    clap_sound.play(clap_sound_ID, 1, 1, 1, 0, 1);
                    return true;
                }

                return false;
            }
        });
        //for kick
        kick.setOnTouchListener(new OnTouchListener() {

            @Override
            public boolean onTouch(View v, MotionEvent event) {
                if (event.getAction() == MotionEvent.ACTION_DOWN) {
                    kick_sound.play(kick_sound_ID, 1, 1, 1, 0, 1);
                    return true;
                }

                return false;
            }
        });
        //for snare
        snare.setOnTouchListener(new OnTouchListener() {

            @Override
            public boolean onTouch(View v, MotionEvent event) {
                if (event.getAction() == MotionEvent.ACTION_DOWN) {
                    snare_Sound.play(snare_sound_ID, 1, 1, 1, 0, 1);
                    return true;
                }

                return false;
            }
        });
        //for qsnare
        qsnare.setOnTouchListener(new OnTouchListener() {

            @Override
            public boolean onTouch(View v, MotionEvent event) {
                if (event.getAction() == MotionEvent.ACTION_DOWN) {
                    qsnare_sound.play(qsnare_sound_ID, 1, 1, 1, 0, 1);
                    return true;
                }

                return false;
            }
        });




    }


}
